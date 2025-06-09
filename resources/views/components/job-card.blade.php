 <x-panel class="flex flex-col text-center">
    <div>
        <div class="self-start text-sm">Employer</div>
        
        <div class="py-8">
            <h3 class="text-xl font-bold group-hover:text-blue-800 transitions-colors duration-300">Job Title</h3>
            <p class="text-sm mt-4">Salary</p>
        </div>

        <div class="flex justify-between items-center mt-auto">
            <div>
                <x-tag size="small">Backend</x-tag>
                <x-tag size="small">Frontend</x-tag>
            </div>

            <x-employer-logo :width="42"/>
        </div>
    </div> 
</x-panel>