<?php require 'views/partials/header.php'; ?>

<div class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-md">
  <h2 class="text-xl font-bold mb-4 text-gray-700">ویرایش دارو</h2>

  <form action="index.php?action=update&id=<?= $drug['drugId'] ?>" method="post" class="space-y-4">

    <div>
      <label class="block text-sm font-medium text-gray-500">کد دارو (غیرقابل تغییر)</label>
      <input type="text" value="<?= $drug['drugId'] ?>" disabled class="w-full bg-gray-100 border border-gray-300 p-2 rounded">
    </div>

    <div>
      <label class="block text-sm font-medium">نام دارو</label>
      <input type="text" name="name" value="<?= $drug['drugName'] ?>" class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:border-emerald-500">
    </div>

    <div class="grid grid-cols-2 gap-4">
      <div>
        <label class="block text-sm font-medium">دسته بندی</label>
        <input type="text" name="category" value="<?= $drug['drugCategory'] ?>" class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:border-emerald-500">
      </div>
      <div>
        <label class="block text-sm font-medium">قیمت</label>
        <input type="number" name="price" value="<?= $drug['drugPrice'] ?>" class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:border-emerald-500">
      </div>
    </div>

    <div class="grid grid-cols-2 gap-4">
      <div>
        <label class="block text-sm font-medium">تعداد</label>
        <input type="number" name="quantity" value="<?= $drug['drugQuantity'] ?>" class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:border-emerald-500">
      </div>
      <div>
        <label class="block text-sm font-medium">تامین کننده</label>
        <input type="text" name="supplier" value="<?= $drug['supplierId'] ?>" class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:border-emerald-500">
      </div>
    </div>

    <div class="flex gap-2 pt-2">
      <button type="submit" name="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 w-full">بروزرسانی</button>
      <a href="index.php" class="bg-gray-400 text-white px-4 py-2 rounded hover:bg-gray-500 text-center">لغو</a>
    </div>
  </form>
</div>

<?php require 'views/partials/footer.php'; ?>