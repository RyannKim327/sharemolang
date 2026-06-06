@extends('app')

@section('title', 'Register & Upload File - ShareMoLang')

@section('content')
<div class="min-h-screen bg-[#06060c] bg-radial-[at_50%_0%] from-slate-900 via-[#06060c] to-[#040408] text-slate-100 flex flex-col justify-center items-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="absolute inset-0 bg-[linear-gradient(to_right,#1f29370a_1px,transparent_1px),linear-gradient(to_bottom,#1f29370a_1px,transparent_1px)] bg-[size:4rem_4rem] pointer-events-none"></div>

    <div class="relative w-full max-w-4xl space-y-6">
        <!-- Back Link -->
        <div class="text-center">
            <a href="{{ url('/') }}" class="inline-flex items-center text-xs font-semibold text-slate-500 hover:text-pink-400 transition-colors">
                &larr; Return to Interactive Layout Showcase
            </a>
        </div>

        <!-- Render Component -->
        <x-upload-form />
    </div>
</div>

<!-- Supporting Script for Upload Page Interaction -->
<script>
    function triggerFileSelect() {
        document.getElementById('file-input').click();
    }

    function handleFileSelect(input) {
        if (input.files && input.files[0]) {
            const file = input.files[0];
            document.getElementById('dropzone').classList.add('hidden');
            document.getElementById('file-preview-card').classList.remove('hidden');
            document.getElementById('preview-filename').textContent = file.name;
            
            const sizeInMB = (file.size / (1024 * 1024)).toFixed(2);
            document.getElementById('preview-filesize').textContent = `${sizeInMB} MB`;
            
            const nameField = document.getElementById('file-name');
            if (!nameField.value) {
                nameField.value = file.name.substring(0, file.name.lastIndexOf('.')) || file.name;
            }
        }
    }

    function removeSelectedFile() {
        document.getElementById('file-input').value = '';
        document.getElementById('file-preview-card').classList.add('hidden');
        document.getElementById('dropzone').classList.remove('hidden');
    }

    function generateFilePassword() {
        const chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*';
        let pass = '';
        for (let i = 0; i < 10; i++) {
            pass += chars.charAt(Math.floor(Math.random() * chars.length));
        }
        document.getElementById('file-password').value = pass;
        alert(`Generated access password: ${pass}\nSave this code to unlock the file later!`);
    }

    function toggleAccountRegistrationFields(checkbox) {
        const fields = document.getElementById('account-fields');
        if (checkbox.checked) {
            fields.classList.remove('hidden');
            document.getElementById('reg-email').required = true;
            document.getElementById('reg-password').required = true;
        } else {
            fields.classList.add('hidden');
            document.getElementById('reg-email').required = false;
            document.getElementById('reg-password').required = false;
        }
    }

    function handleDemoUpload(event) {
        // Since we are on a standalone page, we submit to the actual upload route or showcase the upload
        alert("Submitting file upload metadata to Laravel backend...");
        event.target.submit();
    }
</script>
@endsection
