variable dnsName {
    default = "itsmeganificent.com"
}
variable itype {
    default = "t2.micro"
}
variable keyname {
    default = "webserver-key"
}
variable region {
    default = "us-east-1"
}
variable secgroupname {
    default = "Webserver-Sec-Group"
}
variable secGroups {
    default = ["Webserver-Sec-Group"]
}
variable sshIP {
    default = ["136.37.117.0/24"]
}
variable sshPub {
    default = "./webserver.pub"
}
variable subnet {
    default = "subnet-0beea67bf6470d712"
}
variable tags {
    default = { Name = "Webserver" }
    description = "Tags to apply to created resources"
}
variable vpc {
    default = "vpc-00a0663f397146f3d"
}