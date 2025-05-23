<x-layout>
    <div class="space-y-10">

        <section class="text-center pt-6">
            <h1 class="font-bold text-4xl">Let's Find Your Next Job</h1>
            <form action="">
                <input type="text" placeholder="web developer..." class = "rounded-xl bg-white/10 border-white/20 px-5 py-6 w-full max-w-xl">
            </form>
        </section>

        <section class="pt-10">
            <x-section-heading>Top Jobs</x-section-heading>
            <div class="grid lg:grid-cols-3 gap-8 mt-6">
                <x-job-card/>
                <x-job-card/>
                <x-job-card/>
            </div>
        </section>
        <section>
            <x-section-heading>Tags</x-section-heading>
            <div class="grid lg:grid-cols-3 gap-8 mt-6">
                <div class="mt-6 space-x-1">
                    <x-tag>Tag</x-tag>
                    <x-tag>Tag</x-tag>
                    <x-tag>Tag</x-tag>
                    <x-tag>Tag</x-tag>
                </div>
                
            </div>
        </section>
        <section>
            <x-section-heading>Recent Jobs</x-section-heading>
            <div class="mt-6 space-y-3">
                <x-job-card-wide/>
                <x-job-card-wide/>
                <x-job-card-wide/>
                <x-job-card-wide/>
                <x-job-card-wide/>
            </div>
        </section>
    </div>
</x-layout> 