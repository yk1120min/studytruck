@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-black-700']) }}>
    {{ $value ?? $slot }}
</label>

<!--
 $attributesには、呼び出し元のHTMLの属性が渡される。 class属性はデフォルトで既に存在していればマージされる。
 -->
