# Webserver Terraform


## Description
This is a fairly simple [Terraform](https://www.terraform.io/) setup that utilizes some standardized modules from the [SharedTerraform](https://www.github.com/TheBatchelorFamily/SharedTerraform) repository.
This allows some of the complexity to be abstracted, and also provides for a more standardized modular approach to deployment.
With the added modularity, it will be easier to safely deploy another containerized app at some point in the future, and have both benefit from various enhancements and security updates.

## State file
The state file is now stored in an s3 bucket so that it is easy to clone the repository and deploy locally (with the appropriate credentials) from any workstation, but the primary intention is to deploy via the [GitHub Action](../.github/workflows/terraform-deploy.yml) within this repository.

## Components
* [aws_s3_bucket](https://registry.terraform.io/providers/hashicorp/aws/latest/docs/resources/s3_bucket)
  * This is currently only used to store the state file mentioned above.
* [aws_s3_bucket_server_side_encryption_configuration](https://registry.terraform.io/providers/hashicorp/aws/latest/docs/resources/s3_bucket_server_side_encryption_configuration)
  * Adding encryption to an s3 bucket requires a separate resource. For this deployment we are only using AES256 encryption.
* [aws_webserver_network](https://www.github.com/TheBatchelorFamily/SharedTerraform)
  * This is a custom built module that can be found in the SharedTerraform repository.
  * The module sets up the security group, the elastic ip, and the route53 entries for www and non-www URLs.
* [aws_auto_scale](https://www.github.com/TheBatchelorFamily/SharedTerraform)
  * This is a custom built module that can be found in the SharedTerraform repository.
  * With this module...
    * An ssh key pair is created
    * An iam role and policy is created to allow the EC2 instances created to grab the elastic ip
    * An instance profile is created to assign the iam role to EC2 instances created via the auto scaling group
    * A launch template is created to specify the types of instances that will be built
    * An autoscaling group is created to orchestrate the launching of EC2 instances and maintain availability

## Usage
Prior to deploying the default variable values should be verified, and any variables that need to be updated should be set in the `terraform.tfvars` file.
This is very straightforward and done in the `variableName = "variable value"` format. Alternatively the default values can simply be updated in the variables.tf file if the change should ultimately be permanent.

### Automated Deployment
This configuration is intended to be deployed in an automated fashion, utilizing the [Terraform Deploy](../.github/workflows/terraform-deploy.yml).
This job will automatically run if a change is made to a file within the "infrastructure" directory, or if the workflow definition for the action itself is modified.

Its possible that a deployment will need to be made with no changes.
In this case, the "workflow_dispatch" option has been enabled that allows the deployment workflow to be used with no updates.
Simply go to the "Actions" tab in GitHub, Click on the "Terraform Deploy" workflow, and find the blue banner towards the middle of the page stating "This workflow has a workflow_dispatch event trigger".
Click the "Run Workflow" drop down box on the right side of the banner, select the branch, and click the green "Run workflow" button.

### Manual Deployment
In some cases, it may be necessary to deploy this terraform configuration from a local workstation. In this case, the repository can be cloned locally. [Local authentication](https://registry.terraform.io/providers/hashicorp/aws/latest/docs#environment-variables) will need to be configured as well. The environment variable method is recommended.


Use the [plan](https://www.terraform.io/cli/commands/plan) command to verify what will be created, modified, or destroyed.
As a bonus, this helps to catch potential errors in the setup that would prevent the deployment from succeeding.
```bash
terraform plan -out webserver.tfplan
```

Use the [apply](https://www.terraform.io/cli/commands/apply) command to deploy the new infrastructure to AWS.
```bash
terraform apply webserver.tfplan
```

When the webserver is no longer needed, use the [destroy](https://www.terraform.io/cli/commands/destroy) command to tear down all of the created infrastructure, and stop incurring charges from AWS.
Its best to verify everything has been destroyed as intended in AWS.
```bash
terraform destroy
```