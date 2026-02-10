<?php require 'views/partials/header.php'; ?>

<div class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-md">
  <h2 class="text-xl font-bold mb-4 text-gray-700">افزودن داروی جدید</h2>

  <form action="index.php?action=store" method="post" class="space-y-4">
    <div>
      <label class="block text-sm font-medium">کد دارو</label>
      <input type="number" min="1" name="drugId" class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:border-emerald-500" required>
    </div>
    <div>
      <label class="block text-sm font-medium">نام دارو</label>
      <input type="text" name="name" required class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:border-emerald-500">
    </div>
    <div class="grid grid-cols-2 gap-4">
      <div>
        <label class="block text-sm font-medium mb-1">دسته بندی</label>
        <select name="category" required class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:border-emerald-500 bg-white">
          <option value="" disabled selected>انتخاب کنید...</option>
          <option value="قرص">قرص</option>
          <option value="شربت">شربت</option>
          <option value="آمپول">آمپول</option>
          <option value="ویتامین">ویتامین</option>
        </select>
      </div>
      <div>
        <label class="block text-sm font-medium">قیمت</label>
        <input type="number" name="price" required class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:border-emerald-500">
      </div>
    </div>
    <div class="grid grid-cols-2 gap-4">
      <div>
        <label class="block text-sm font-medium">تعداد</label>
        <input type="number" name="quantity" required class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:border-emerald-500">
      </div>
      <div>
        <label class="block text-sm font-medium mb-1">تامین کننده</label>
        <select name="supplier" required class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:border-emerald-500 bg-white">
          <option value="" disabled selected>شرکت را انتخاب کنید...</option>
          <option value="داروسازی دکتر عبیدی">داروسازی دکتر عبیدی</option>
          <option value="کارخانجات داروپخش">کارخانجات داروپخش</option>
          <option value="داروسازی دانا">داروسازی دانا</option>
          <option value="داروسازی تهران دارو">داروسازی تهران دارو</option>
          <option value="داروسازی رازک">شرکت سهامی داروسازی رازک</option>
          <option value="داروسازی ابوریحان">داروسازی ابوریحان</option>
          <option value="داروسازی جابربن‌حیان">شرکت داروسازی جابربن‌حیان</option>
          <option value="داروسازی کاسپین تامین">شرکت داروسازی کاسپین تامین</option>
        </select>
      </div>
    </div>

    <div class="flex gap-2 pt-2">
      <button type="submit" name="submit" class="bg-emerald-600 text-white px-4 py-2 rounded hover:bg-emerald-700 w-full">ذخیره</button>
      <a href="index.php" class="bg-gray-400 text-white px-4 py-2 rounded hover:bg-gray-500 text-center">لغو</a>
    </div>
  </form>
</div>

<?php require 'views/partials/footer.php'; ?>