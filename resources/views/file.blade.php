@extends('app')

@section('title', 'Secure File View - ShareMoLang')

@section('content')
<div class="min-h-screen bg-[#06060c] bg-radial-[at_50%_0%] from-slate-900 via-[#06060c] to-[#040408] text-slate-100 flex flex-col justify-center items-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="absolute inset-0 bg-[linear-gradient(to_right,#1f29370a_1px,transparent_1px),linear-gradient(to_bottom,#1f29370a_1px,transparent_1px)] bg-[size:4rem_4rem] pointer-events-none"></div>

    <div class="relative w-full max-w-2xl space-y-6">
        <!-- Back Link -->
        <div class="text-center">
            <a href="{{ url('/') }}" class="inline-flex items-center text-xs font-semibold text-slate-500 hover:text-teal-400 transition-colors">
                &larr; Return to Interactive Layout Showcase
            </a>
        </div>

        <!-- Render Component -->
        <x-file-view />
    </div>
</div>

<!-- Supporting Script for Secure File View Interaction -->
<script>
    // State of the current simulation
    const simulatedFile = {
        name: 'Project_Design_Brief.pdf',
        size: '4.8 MB',
        description: 'This contains the layout wireframes, color palette configuration, typography definition, and component catalog for the new ShareMoLang project. Please review and provide feedback.',
        password: 'secret',
        expiration: 'Expires in 23h 58m',
        dateStr: 'Uploaded today, 10:24 AM',
        downloads: 12,
        format: 'pdf'
    };

    function updateFileViewLayout() {
        document.getElementById('view-file-name').textContent = simulatedFile.name;
        document.getElementById('view-file-size').textContent = simulatedFile.size;
        document.getElementById('view-file-date').textContent = simulatedFile.dateStr;
        document.getElementById('view-file-downloads').textContent = `${simulatedFile.downloads} downloads`;
        document.getElementById('view-file-desc').textContent = simulatedFile.description || 'No description provided.';
        document.getElementById('view-file-expiration').textContent = simulatedFile.expiration;
    }

    function unlockDemoFile(event) {
        event.preventDefault();
        const input = document.getElementById('unlock-password');
        const errorText = document.getElementById('unlock-error');
        
        if (!simulatedFile.password || input.value === simulatedFile.password) {
            errorText.classList.add('hidden');
            input.value = '';
            
            document.getElementById('file-lock-state').classList.add('hidden');
            document.getElementById('file-details-state').classList.remove('hidden');
        } else {
            errorText.classList.remove('hidden');
            input.classList.add('border-rose-500', 'ring-2', 'ring-rose-500/20');
            setTimeout(() => {
                input.classList.remove('border-rose-500', 'ring-2', 'ring-rose-500/20');
            }, 1000);
        }
    }

    function lockDemoFile() {
        document.getElementById('unlock-password').value = '';
        document.getElementById('unlock-error').classList.add('hidden');
        
        if (simulatedFile.password) {
            document.getElementById('file-lock-state').classList.remove('hidden');
            document.getElementById('file-details-state').classList.add('hidden');
        } else {
            document.getElementById('file-lock-state').classList.add('hidden');
            document.getElementById('file-details-state').classList.remove('hidden');
        }
    }

    function handleDemoDownloadLink(event) {
        event.preventDefault();
        simulatedFile.downloads++;
        document.getElementById('view-file-downloads').textContent = `${simulatedFile.downloads} downloads`;
        alert(`Simulating secure download for "${simulatedFile.name}"...`);
    }

    function copyDemoShareLink(btn) {
        const tooltip = btn.querySelector('.tooltip-text');
        const simulatedUrl = window.location.href;
        navigator.clipboard.writeText(simulatedUrl).then(() => {
            tooltip.classList.remove('hidden');
            setTimeout(() => {
                tooltip.classList.add('hidden');
            }, 2000);
        }).catch(err => {
            tooltip.classList.remove('hidden');
            setTimeout(() => {
                tooltip.classList.add('hidden');
            }, 2000);
        });
    }

    window.addEventListener('DOMContentLoaded', () => {
        updateFileViewLayout();
        lockDemoFile();
    });
</script>
@endsection
