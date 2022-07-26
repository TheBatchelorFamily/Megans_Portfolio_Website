terraform{
    required_providers {
      aws = {
        source  = "hashicorp/aws"
        version = "4.22.0"
      }
    }
    required_version = "1.2.5"
}

provider "aws" {
  region = var.region
}

module "aws_webserver_network" {
  source       = "git@github.com:TheBatchelorFamily/SharedTerraform.git//modules/aws_webserver_network?ref=module_build"
  dnsName      = var.dnsName
  r53Enabled   = false
  region       = var.region
  secgroupname = var.secgroupname
  tags         = var.tags
  vpc          = var.vpc
}

module "aws_auto_scale" {
  securityGroup = var.secGroups
  source   = "git@github.com:TheBatchelorFamily/SharedTerraform.git//modules/aws_auto_scale?ref=module_build"
  sshPub   = file(var.sshPub)
  subnet   = var.subnet
  tags     = var.tags
  userData = templatefile(
    "./user_data.sh",
    {
      eipID:module.aws_webserver_network.aws_eip_alloID,
      region:var.region
    }
  )
}