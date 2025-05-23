terraform{
  backend "s3" {
    bucket = "terraform-itsmeganificent"
    key    = "terraform.tfstate"
    region = "us-east-1"
  }
  required_providers {
    aws = {
      source  = "hashicorp/aws"
      version = "~> 5.98"
    }
  }
  required_version = "~> 1.12"
}

provider "aws" {
  region = var.region
}
