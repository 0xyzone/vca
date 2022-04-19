<!-- component -->
<style>
    /* CHECKBOX TOGGLE SWITCH */
    /* @apply rules for documentation, these do not work as inline style */
</style>

<div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-500 ease-in-out">
    <input type="checkbox" name="toggle" id="toggle" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer ring-0 outline-[0] transform duration-300 ease-in-out" />
    <label for="toggle" class="toggle-label block overflow-hidden h-6 rounded-full bg-stone-400 cursor-pointer duration-300"></label>
</div>
<script>
    if (Mode === 'dark') {
        enableDarkMode();
        $("#toggle").prop('checked',true);
    }

    $('#toggle').click(function() {
        Mode = localStorage.getItem('Mode');
        if ($('#toggle').prop('checked') == true) {
            $('#toggle').val('light');
            console.log('Darkmode Enabled');
            enableDarkMode();
        } else if ($('#toggle').prop('checked') == false) {
            $('#toggle').val('dark');
            $('#logo').prop('src', '<?php echo site(); ?>assets/img/logo.png');
            console.log('Darkmode Disabled');
            disableDarkMode();
        }
    })
</script>