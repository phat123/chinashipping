<?php
class SmtpMailSystem__DefaultMailSystem implements MailSystemInterface {
  protected $formatClass;
  protected $mailClass;
  public function __construct() {
    if (drupal_autoload_class('SmtpMailSystem')) {
      $this->formatClass = new SmtpMailSystem;
    }
    else {
      $this->formatClass = new DefaultMailSystem;
    }
    if (drupal_autoload_class('DefaultMailSystem')) {
      $this->mailClass = new DefaultMailSystem;
    }
    else {
      $this->mailClass = new DefaultMailSystem;
    }
  }
  public function format(array $message) {
    return $this->formatClass->format($message);
  }
  public function mail(array $message) {
    return $this->mailClass->mail($message);
  }
}
