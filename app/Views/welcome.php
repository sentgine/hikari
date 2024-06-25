<?=
layout('layout/app');
param('title', $title);
?>
<div class="min-h-screen flex flex-col justify-center py-6 px-6">
    <div class="max-w-3xl mx-auto text-center mb-16">
        <div class="flex justify-center">
            <img src="<?= url('hikari-logo.png') ?>" alt="Hikari Logo" class="h-28 w-28">
        </div>
        <h1 class="text-6xl font-bold mb-6">Hikari</h1>
        <p class="text-lg mb-8">The PHP micro-framework designed for simplicity and speed.</p>
        <div class="flex justify-center">
            <a href="https://hikari.sentgine.com/" class="bg-white text-blue-700 hover:bg-blue-200 hover:text-blue-900 font-bold py-3 px-6 rounded-lg mr-4">Read the docs!</a>
        </div>
    </div>
</div>