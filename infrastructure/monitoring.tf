# SNS Topic for alerts
resource "aws_sns_topic" "webserver_alerts" {
  name = "webserver-alerts"
  tags = var.tags
}

# Email subscription to SNS topic
resource "aws_sns_topic_subscription" "webserver_alerts_email" {
  topic_arn = aws_sns_topic.webserver_alerts.arn
  protocol  = "email"
  endpoint  = var.alert_email
}

# CloudWatch Alarm for EC2 Instance Status Checks
resource "aws_cloudwatch_metric_alarm" "instance_status_check" {
  alarm_name          = "webserver-status-check"
  comparison_operator = "GreaterThanOrEqualToThreshold"
  evaluation_periods  = 3
  metric_name         = "StatusCheckFailed"
  namespace           = "AWS/EC2"
  period              = 600
  statistic           = "Maximum"
  threshold           = 1
  alarm_description   = "Alert when EC2 instance fails status checks for 15+ minutes"
  alarm_actions       = [aws_sns_topic.webserver_alerts.arn]
  treat_missing_data  = "notBreaching"

  dimensions = {
    AutoScalingGroupName = module.aws_auto_scale.asg_name
  }

  tags = var.tags
}
