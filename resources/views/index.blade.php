@extends('app')

@section('content')
	<div class="flex flex-col w-full">
		<span class="text-[1.5rem]">Top Downloads</span>
		<div id="file-lists" class="flex flex-row flex-wrap gap-2 w-full"></div>
	</div>

	<script>
		const main = document.getElementById("file-lists")
		const files = [
			{
				id: 1,
				name: "Sample File.png",
				description: "Hello World",
				expiration: 1780754837, // 2026-06-06
				url: "google",
				protected: false
			},
			{
				id: 2,
				name: "Project Proposal.pdf",
				description: "Project proposal",
				expiration: 1783346837, // 2026-07-06
				url: "drive-link-1",
				protected: true
			},
			{
				id: 3,
				name: "Marketing Banner.jpg",
				description: "Marketing assets",
				expiration: 1786025237, // 2026-08-06
				url: "cdn-link-2",
				protected: false
			},
			{
				id: 4,
				name: "Employee Handbook.docx",
				description: "Internal documentation",
				expiration: 1788703637, // 2026-09-06
				url: "storage-link-3",
				protected: true
			},
			{
				id: 5,
				name: "Financial Report.xlsx",
				description: "Q3 financial report",
				expiration: 1791295637, // 2026-10-06
				url: "storage-link-4",
				protected: false
			},
			{
				id: 6,
				name: "Presentation Slides.pptx",
				description: "Company presentation",
				expiration: 1793974037, // 2026-11-06
				url: "drive-link-5",
				protected: true
			}
		];

		files.map(file => {
			const container = document.createElement("div")
			const title = document.createElement("span")
			const description = document.createElement("span")

			container.classList.add(
				'flex', 'flex-col',
				'rounded', 'bg-[#0f172a]',
				'w-[calc(25%-0.5em)]', 'p-2'
			)

			title.textContent = file.name
			description.textContent = file.description

			container.appendChild(title)
			container.appendChild(description)

			main.appendChild(container)
		})
	</script>
@endsection
