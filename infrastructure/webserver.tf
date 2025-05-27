resource "aws_s3_bucket" "terraform_state" {
  #ts:skip=AC_AWS_0214 Enabling S3 versioning
  bucket = "terraform-itsmeganificent"
}

resource "aws_s3_bucket_server_side_encryption_configuration" "terraform_state" {
  bucket = aws_s3_bucket.terraform_state.bucket

  rule {
    apply_server_side_encryption_by_default {
      sse_algorithm = "AES256"
    }
  }
}

module "aws_webserver_network" {
  source       = "github.com/TheBatchelorFamily/SharedTerraform.git//modules/aws_webserver_network?ref=cloudfront"
  region       = var.region
  secgroupname = "itsmeganificent-Group"
  sshIP        = ["136.32.167.156/32"]
  tags         = var.tags
}

module "aws_auto_scale" {
  keyname       = "itsmeganificent-key"
  publicIP      = true
  securityGroup = [module.aws_webserver_network.aws_security_group_id]
  source        = "github.com/TheBatchelorFamily/SharedTerraform.git//modules/aws_auto_scale?ref=cloudfront"
  sshPub        = file("./webserver.pub")
  tags          = var.tags
  userData = base64encode(templatefile(
    "./user_data.tftpl",
    {
      eipID:module.aws_webserver_network.aws_eip_alloID,
      region:var.region,
      tag:"2.0.2"
    }
  ))
}

output "cloudfront_domain_name" {
  value       = module.aws_webserver_network.cloudfront_domain_name
  description = "The domain name of the CloudFront distribution"
}
