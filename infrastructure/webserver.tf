module "aws_webserver_network" {
  #checkov:skip=CKV_TF_2: point to branch for testing
  source       = "github.com/TheBatchelorFamily/SharedTerraform.git//modules/aws_webserver_network?ref=cloudfront"
  region       = var.region
  secgroupname = "itsmeganificent-Group"
  sshIP        = ["136.32.167.156/32"]
  tags         = var.tags

  providers = {
    aws           = aws
    aws.us_east_1 = aws.us_east_1
  }
}

module "aws_auto_scale" {
  #checkov:skip=CKV_TF_2: point to branch for testing
  keyname       = var.keyname
  publicIP      = var.publicIP
  securityGroup = [module.aws_webserver_network.aws_security_group_id]
  source        = "github.com/TheBatchelorFamily/SharedTerraform.git//modules/aws_auto_scale?ref=cloudfront"
  sshPub        = file("./webserver.pub")
  subnets       = module.aws_webserver_network.subnet_ids
  tags          = var.tags
  userData = base64encode(templatefile(
    "./user_data.tftpl",
    {
      eipID : module.aws_webserver_network.aws_eip_alloID,
      region : var.region,
      tag : var.image_tag
    }
  ))
}

output "cloudfront_domain_name" {
  value       = module.aws_webserver_network.cloudfront_domain_name
  description = "The domain name of the CloudFront distribution"
}
