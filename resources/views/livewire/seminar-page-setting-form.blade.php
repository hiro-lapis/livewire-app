<div>
    <h1 class="c-title">ページ設計</h1>
    {{-- メイン設定 --}}
    <div class="c-design-setting">
        <h2 class="c-title">基本設定</h2>
        <h3 class="c-title">ページタイトル</h3>
        <p class="c-title">{{ $title }}</p>
        <input class="livewire-input" type="text" wire:model="title">

        <h2 class="c-title">ページ概要</h2>
        <h3 class="c-seminar-summary">{{ $summary }}</h3>
        <input class="livewire-input" type="text" wire:model="summary">

        <h3 class="c-head-visual">ビジュアル</h3>
        <input class="livewire-input" type="file" wire:model="img">
    </div>
    {{-- 表示項目の設定 --}}
    <div class="c-content-setting">
        <h2 class="c-title">フォーム設定</h2>
        <input class="livewire-input" type="button" wire:model="img">
        {{-- ボタンを押して動的にフォーム項目を追加する --}}
    </div>
    {{-- 申し込みボタンの設定 --}}
    <div class="c-apply-button-setting">
        <h2 class="c-title">申し込みボタン</h2>
        <label for="apply">設置場所・個数</label>
        <input wire:model="place" type="radio" name="apply" class="c-radio" value="1">
        <input wire:model="place" type="radio" name="apply" class="c-radio" value="2">
        <input wire:model="place" type="radio" name="apply" class="c-radio" value="3">
        <input class="livewire-input" type="button" wire:model="img">
        {{-- ボタンを押して動的にフォーム項目を追加する --}}
    </div>
    <input type="button" value="プレビュー">



    <p>{{ $name }}</p>
    {{-- The whole world belongs to you --}}
</div>
