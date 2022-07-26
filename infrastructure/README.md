# Webserver Terraform


## Description
This is a very simple [Terraform](https://www.terraform.io/) setup that builds out the necessary components to deploy a containerized webserver image on an EC2 instance and link it to an existing route53 entry.

## Variables

| Variable     | Definition             | Default                  |
| ------------ | ---------------------- | ------------------------ |
| dnsName      | registered web URL     | itsmeganificent.com      |
| itype        | EC2 instance size      | t2.micro                 |
| keyname      | name of ssh key        | webserver-key            |
| region       | AWS region             | us-east-1                |
| secgroupname | security group name    | Webserver-Sec-Group      |
| sshIP        | cider for ssh ingress  | 136.37.117.0/24          |
| sshPub       | ssh public key-value   | secret                   |
| subnet       | existing subnet in AWS | subnet-0beea67bf6470d712 |
| vpc          | default VPC in AWS     | vpc-00a0663f397146f3d    |

## Components
* [AWS Security Group](https://docs.aws.amazon.com/vpc/latest/userguide/VPC_SecurityGroups.html)
  * This is essentially the instance firewall for the ec2 instance that runs the web server
* [AWS Key Pair](https://docs.aws.amazon.com/AWSEC2/latest/UserGuide/ec2-key-pairs.html)
  * This is the ssh key that allows access to the ec2 instance via ssh
* [AWS Spot Instance](https://docs.aws.amazon.com/AWSEC2/latest/UserGuide/using-spot-instances.html)
  * We request a spot instance to minimize the cost of the instance.
  * Spot instances have no guaranteed uptime.
* [AWS Elastic IP](https://docs.aws.amazon.com/AWSEC2/latest/UserGuide/elastic-ip-addresses-eip.html)
  * Elastic IPs are static puplic IPs that can be attached directly to any EC2 instance.
* [AWS Route53 record](https://docs.aws.amazon.com/Route53/latest/DeveloperGuide/routing-to-ec2-instance.html)
  * This links the AWS DNS entry to the static IP allocated to the Elastic IP.
  * There are two of these entries, one of `www`, and one without.

## Usage
Prior to deploying the default variable values should be verified, and any variables that need to be updated should be set in the `terraform.tfvars` file. This is very straightforward and done in the `variableName = "variable value"` format.

Use the `plan` command to verify what will be created, modified, or destroyed.
```bash
terraform plan -out webserver.tfplan
```

Use the `apply` command to deploy the new infrastructure to AWS.
```bash
terraform apply webserver.tfplan
```

When the webserver is no longer needed, use the `destroy` command to tear down all of the created infrastructure, and stop incurring charges from AWS.
```bash
terraform destroy
```