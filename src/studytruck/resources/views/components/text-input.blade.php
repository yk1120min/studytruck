@props(['disabled' => false])


<input @disabled($disabled) {{ $attributes->merge(['class' => 'border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm']) }}>

<!-- 
呼び出し元から disabled が渡されたら true にする
true なら <input disabled> の形で disabled を出力
-->