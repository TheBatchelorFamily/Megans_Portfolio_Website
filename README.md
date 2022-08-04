# Megans_Portfolio_Website
The current home of http://www.itsmeganificent.com/

## Infrastructure
The webserver is a simple docker container running on an AWS spot instance to increase portability and minimize costs. This is deployed via an auto-scaling group to help maintain availability. The instance assigns an elastic IP address to itself, that is tied to a DNS entry stored in Route53. 

This is all deployed via the Terraform config located in the infrastructure directory of this repository. Much of the config has been abstracted and centralized into a separate repository in the form of Terraform modules.

## Deployment Process
### Terraform
A workflow has been created via GitHub Actions. The workflow is triggered on push to the `main` branch of the repository, when a non-markdown file is updated within the `infrastructure` directory, or if the workflow file is updated. As an alternative, this workflow can be manually triggered via clicking the "Run workflow" button on the `Actions` tab.

More specific information can be found by viewing the supplemental [README](./infrastructure/README.md) file in the infrastructure directory.

### Docker
A workflow has been created via GitHub Actions. This workflow is triggered when a new release is published in this repository. When the workflow runs, the released tag is applied to the image and it is pushed up to the docker repository. The latest tag in that repository is also updated.


## Maintainers
* [Megan Batchelor](@fiercekitti)(Front-End Developer)
* [Chris Batchelor](@christsreturn)(DevOps Engineer)