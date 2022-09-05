terraform{
  backend "s3" {
    bucket = "terraform-itsmeganificent"
    key    = "terraform.tfstate"
    region = "us-east-1"
  }
  required_providers {
    aws = {
      source  = "hashicorp/aws"
      version = "4.22.0"
    }
  }
  required_version = "~> 1.2.5"
}

provider "aws" {
  region = var.region
}

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
  source       = "github.com/TheBatchelorFamily/SharedTerraform.git//modules/aws_webserver_network?ref=1.0.1"
  dnsName      = var.dnsName
  r53Enabled   = true
  region       = var.region
  secgroupname = var.secgroupname
  sshIP        = var.sshIP
  tags         = var.tags
  vpc          = var.vpc
}

module "aws_auto_scale" {
  keyname       = var.keyname
  publicIP      = true
  securityGroup = [module.aws_webserver_network.aws_security_group_id]
  source        = "github.com/TheBatchelorFamily/SharedTerraform.git//modules/aws_auto_scale?ref=instance_refresh"
  sshPub        = file(var.sshPub)
  subnet        = var.subnet
  tags          = var.tags
  userData      = base64encode(templatefile(
    "./user_data.tftpl",
    {
      eipID:module.aws_webserver_network.aws_eip_alloID,
      region:var.region,
      tag:var.imageTag
    }
  ))
}
