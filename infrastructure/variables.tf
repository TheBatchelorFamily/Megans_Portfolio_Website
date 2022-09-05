variable dnsName {
    default = "itsmeganificent.com"
}
variable imageTag {
    default = "2.0.2"
}
variable itype {
    default = "t2.micro"
}
variable keyname {
    default = "itsmeganificent-key"
}
variable region {
    default = "us-east-1"
}
variable secgroupname {
    default = "itsmeganificent-Group"
}
variable sshIP {
    default = ["136.32.167.156/32"]
}
variable sshPub {
    default = "./webserver.pub"
}
variable subnet {
    default = "subnet-0beea67bf6470d712"
}
variable tags {
    default = { Name = "itsmeganificent" }
    description = "Tags to apply to created resources"
}
variable vpc {
    default = "vpc-00a0663f397146f3d"
}
