<?php
// controllers/DrugController.php
require_once 'config/database.php';

class DrugController
{
  private $db;

  public function __construct()
  {
    global $conn;
    $this->db = $conn;
  }

  // 1. نمایش لیست اصلی
  public function index()
  {
    $stmt = $this->db->query("SELECT * FROM drugs_detail");
    $drugs = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $message = $_GET['msg'] ?? null; // دریافت پیام
    require 'views/index.view.php';
  }

  // 2. نمایش فرم افزودن
  public function create()
  {
    require 'views/add-new.view.php';
  }

  // 3. ذخیره کردن داروی جدید
  public function store()
  {
    if (isset($_POST['submit'])) {
      $sql = "INSERT INTO drugs_detail (drugId, drugName, drugCategory, drugPrice, drugQuantity, supplierId) 
                    VALUES (?, ?, ?, ?, ?, ?)";
      $stmt = $this->db->prepare($sql);
      $stmt->execute([
        $_POST['drugId'],
        $_POST['name'],
        $_POST['category'],
        $_POST['price'],
        $_POST['quantity'],
        $_POST['supplier']
      ]);
      header("Location: index.php?msg=داروی جدید اضافه شد");
      exit;
    }
  }

  // 4. حذف دارو
  public function delete($id)
  {
    $stmt = $this->db->prepare("DELETE FROM drugs_detail WHERE drugId = ?");
    $stmt->execute([$id]);
    header("Location: index.php?msg=دارو با موفقیت حذف شد");
    exit;
  }

  // 5. نمایش فرم ویرایش
  public function edit($id)
  {
    $stmt = $this->db->prepare("SELECT * FROM drugs_detail WHERE drugId = ?");
    $stmt->execute([$id]);
    $drug = $stmt->fetch(PDO::FETCH_ASSOC);
    require 'views/edit.view.php';
  }

  // 6. آپدیت کردن دارو
  public function update($id)
  {
    if (isset($_POST['submit'])) {
      $sql = "UPDATE drugs_detail SET drugName=?, drugCategory=?, drugPrice=?, drugQuantity=?, supplierId=? WHERE drugId=?";
      $stmt = $this->db->prepare($sql);
      $stmt->execute([
        $_POST['name'],
        $_POST['category'],
        $_POST['price'],
        $_POST['quantity'],
        $_POST['supplier'],
        $id
      ]);
      header("Location: index.php?msg=اطلاعات دارو ویرایش شد");
      exit;
    }
  }
}
