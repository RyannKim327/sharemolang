@extends('app')

@section('content')
    <div class="flex flex-col w-full">
		<div class="flex flex-row px-10 items-center justify-between w-full min-h-[calc(90dvh)]">
			<div class="flex flex-col w-[calc(50%-0.5rem)]">
				<span class="text-[3rem]">Anesidora</span>
				<span>Sending of Gifts at no cost</span>
			</div>
			<div class="w-[calc(50%-0.5rem)]">
				<img src="assets/icon.png" alt="">
			</div>
		</div>
		<div class="flex flex-col gap-3 min-h-screen">
			<span class="text-[1.5rem]">Top Downloads</span>
			<div id="file-lists" class="flex flex-row flex-wrap gap-2 w-full"></div>
		</div>
	</div>

	<script>
		const main = document.getElementById("file-lists")
		async function main_loader(){
			const files = await fetch('/api/files/top').then((r) => { return r.json() })
            console.log(files)
			files.forEach(file => {
				const container = document.createElement("div")
				const head = document.createElement("div")
				const icon = document.createElement("img")
				const type = document.createElement("span")
				const title = document.createElement("span")
				const description = document.createElement("span")

				head.classList.add(
					'flex', 'flex-row', 'w-full'
				)

				type.textContent = file.name.split(".")[file.name.split(".").length - 1]
				type.classList.add(
					'px-3', 'text-[0.75rem]', 'rounded-full',
					'bg-[#283044]'
				)
				head.appendChild(type)

				container.classList.add(
					'flex', 'flex-col', 'aspect-video',
					'rounded', 'bg-[#0f172a]',
					'w-[calc(25%-0.5em)]', 'p-2'
				)

				title.textContent = file.name
				description.textContent = file.description

				container.appendChild(head)
				container.appendChild(title)
				container.appendChild(description)

				main.appendChild(container)
			})
		}
		main_loader()
	</script>
@endsection
