<?php
class Database extends PDO
{
  private $DB_NAME = 'mvc_db';
  private $DB_USER = 'root';
  private $DB_PASSWORD = '';
  private $DB_HOST = '127.0.0.1';
  private $DB_PORT = 3306;

  public function __construct()
  {
    parent::__construct(
      "mysql:host={$this->DB_HOST};dbname={$this->DB_NAME}",
      $this->DB_USER,
      $this->DB_PASSWORD
    );
  }

  private function setParameters($stmt, $key, $value)
  {
    $stmt->bindValue($key, $value); 
  }

  private function mountQuery($stmt, $parameters)
  {
    foreach ($parameters as $key => $value) {
      $this->setParameters($stmt, $key, $value);
    }
  }

  public function executeQuery(string $query, array $parameters = [])
  {
    $stmt = $this->prepare($query); 
    $this->mountQuery($stmt, $parameters);
    $stmt->execute();
    return $stmt;
  }
}

?>