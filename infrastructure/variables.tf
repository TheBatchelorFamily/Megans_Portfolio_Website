variable "region" {
  default     = "us-east-1"
  description = "Target AWS region"
  type        = string
}

variable "tags" {
  default     = { Name = "itsmeganificent" }
  description = "Tags to apply to created resources"
  type        = map(string)
}

variable "image_tag" {
  description = "The tag of the container image to deploy"
  type        = string
  default     = "latest"
}

variable "keyname" {
  description = "The name of the SSH key pair"
  type        = string
  default     = "itsmeganificent-key"
}

variable "publicIP" {
  description = "Whether to assign public IPs to instances"
  type        = bool
  default     = true
}

variable "subnets" {
  description = "List of subnet IDs for multi-AZ deployment"
  type        = list(string)
  default     = ["subnet-0beea67bf6470d712"]
}
