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
