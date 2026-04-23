resource "aws_s3_bucket" "terraform_state" {
  #ts:skip=AC_AWS_0214 Enabling S3 versioning
  bucket = "terraform-itsmeganificent"
}

resource "aws_s3_bucket_public_access_block" "terraform_state" {
  bucket                  = aws_s3_bucket.terraform_state.id
  block_public_acls       = true
  block_public_policy     = true
  ignore_public_acls      = true
  restrict_public_buckets = true
}

resource "aws_s3_bucket_server_side_encryption_configuration" "terraform_state" {
  bucket = aws_s3_bucket.terraform_state.bucket

  rule {
    apply_server_side_encryption_by_default {
      sse_algorithm = "AES256"
    }
  }
}

resource "aws_s3_bucket_versioning" "terraform_state_versioning" {
  bucket = aws_s3_bucket.terraform_state.id
  versioning_configuration {
    status = "Enabled"
  }
}

resource "aws_s3_bucket_lifecycle_configuration" "terraform_state_lifecycle" {
  bucket = aws_s3_bucket.terraform_state.id

  rule {
    id     = "cleanup-old-versions"
    status = "Enabled"
    filter {
      prefix = ""
    }

    # Deletes non-current versions after 30 days
    noncurrent_version_expiration {
      noncurrent_days = 30
    }

    # Cleans up "Delete Markers" or incomplete uploads to save space
    abort_incomplete_multipart_upload {
      days_after_initiation = 7
    }
  }
}
