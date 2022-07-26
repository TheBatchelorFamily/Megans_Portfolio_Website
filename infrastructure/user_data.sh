#!/bin/bash
export CONTAINER='fiercekitti/portfolio_website'
export INSTANCE_ID=$(curl -s http://169.254.169.254/latest/meta-data/instance-id)
export ALLOC_ID="${eipID}"
export AWS_DEFAULT_REGION="${region}"

set -ex
sudo yum update -y
sudo amazon-linux-extras install docker -y
sudo service docker start
sudo usermod -a -G docker ec2-user
docker pull $CONTAINER
docker run -it -d -p 80:80 $CONTAINER
#aws ec2 associate-address --instance-id $INSTANCE_ID --allocation-id $ALLOC_ID --allow-reassociation}