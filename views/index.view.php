<?php require 'views/partials/header.php'; ?>

<?php if ($message): ?>
  <div class="bg-emerald-100 border-r-4 border-emerald-500 text-emerald-700 p-4 mb-6 rounded shadow-sm flex justify-between items-center">
    <span><i class="fa-solid fa-check-circle ml-2"></i><?= $message ?></span>
  </div>
<?php endif; ?>

<div class="flex justify-between items-center mb-6">
  <h2 class="text-2xl font-bold text-gray-700 border-b-2 border-emerald-500 pb-2">
    لیست داروها
  </h2>
  <a href="index.php?action=create" class="bg-emerald-600 hover:bg-emerald-700 text-white font-bold py-2 px-6 rounded-lg shadow-md transition duration-300 flex items-center gap-2">
    <i class="fa-solid fa-plus"></i>
    ثبت داروی جدید
  </a>
</div>

<div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-200">
  <table class="min-w-full leading-normal">
    <thead>
      <tr class="bg-gray-800 text-white">
        <th class="px-5 py-4 text-center font-semibold text-sm">کد دارو</th>
        <th class="px-5 py-4 text-center font-semibold text-sm">نام دارو</th>
        <th class="px-5 py-4 text-center font-semibold text-sm">دسته‌بندی</th>
        <th class="px-5 py-4 text-center font-semibold text-sm">قیمت (تومان)</th>
        <th class="px-5 py-4 text-center font-semibold text-sm">موجودی</th>
        <th class="px-5 py-4 text-center font-semibold text-sm">عملیات</th>
      </tr>
    </thead>
    <tbody class="text-gray-700">
      <?php foreach ($drugs as $row): ?>
        <tr class="border-b border-gray-200 hover:bg-emerald-50 transition duration-200">
          <td class="px-5 py-4 text-center">
            <span class="bg-gray-100 text-gray-600 py-1 px-3 rounded-full text-xs font-bold">
              #<?= $row['drugId'] ?>
            </span>
          </td>
          <td class="px-5 py-4 text-center font-bold text-gray-800"><?= $row['drugName'] ?></td>
          <td class="px-5 py-4 text-center">
            <span class="bg-blue-50 text-blue-600 py-1 px-2 rounded text-sm">
              <?= $row['drugCategory'] ?>
            </span>
          </td>
          <td class="px-5 py-4 text-center text-emerald-600 font-bold text-lg">
            <?= number_format($row['drugPrice']) ?>
          </td>
          <td class="px-5 py-4 text-center">
            <?php if ($row['drugQuantity'] > 0): ?>
              <span class="text-green-600 bg-green-100 px-3 py-1 rounded-full text-xs">موجود (<?= $row['drugQuantity'] ?>)</span>
            <?php else: ?>
              <span class="text-red-600 bg-red-100 px-3 py-1 rounded-full text-xs">ناموجود</span>
            <?php endif; ?>
          </td>
          <td class="px-5 py-4 text-center">
            <div class="flex justify-center gap-3">
              <a href="index.php?action=edit&id=<?= $row['drugId'] ?>" class="text-blue-500 hover:text-blue-700 bg-blue-50 hover:bg-blue-100 p-2 rounded-lg transition" title="ویرایش">
                <i class="fa-solid fa-pen-to-square"></i>
              </a>
              <a href="index.php?action=delete&id=<?= $row['drugId'] ?>" class="text-red-500 hover:text-red-700 bg-red-50 hover:bg-red-100 p-2 rounded-lg transition" title="حذف" onclick="return confirm('آیا از حذف این دارو اطمینان دارید؟')">
                <i class="fa-solid fa-trash"></i>
              </a>
            </div>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

  <?php if (empty($drugs)): ?>
    <div class="p-10 text-center text-gray-400">
      <i class="fa-solid fa-box-open text-6xl mb-4"></i>
      <p>هنوز دارویی ثبت نشده است.</p>
    </div>
  <?php endif; ?>
</div>

<?php require 'views/partials/footer.php'; ?>