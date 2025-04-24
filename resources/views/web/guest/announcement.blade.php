<div class="" x-data="{announcement: true}" x-cloak>
    <button class="fixed bottom-4 left-4 bg-red-600 p-4 rounded-full z-40 shadow-md" @click="announcement = !announcement">
        <svg x-show="!announcement" class="text-gray-50 h-8 w-8" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
            <path fill="currentColor" d="M17.212 2.237a.75.75 0 0 0-1.423-.474l-.75 2.249a.75.75 0 0 0 1.423.474l.75-2.249Zm4.568-.017a.75.75 0 0 1 0 1.06l-2.5 2.5a.75.75 0 1 1-1.06-1.06l2.5-2.5a.75.75 0 0 1 1.06 0ZM9.076 4.318a2.325 2.325 0 0 1 3.795-.577l7.006 7.506a2.325 2.325 0 0 1-.758 3.712l-3.42 1.516a4 4 0 0 1-7.314 3.24l-1.417.628a1.8 1.8 0 0 1-1.964-.336L3.565 18.65a1.8 1.8 0 0 1-.387-2.091l5.898-12.24Zm.682 14.789a2.5 2.5 0 0 0 4.569-2.024l-4.57 2.024Zm2.016-14.342a.825.825 0 0 0-1.346.204L4.53 17.21a.3.3 0 0 0 .064.349l1.439 1.356a.3.3 0 0 0 .327.056l12.151-5.383a.825.825 0 0 0 .27-1.317l-7.007-7.506ZM19 8.249a.75.75 0 0 1 .75-.75h2a.75.75 0 0 1 0 1.5h-2a.75.75 0 0 1-.75-.75Z" />
        </svg>
        <svg x-show="announcement" class="text-gray-50 h-8 w-8" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6.758 17.243L12.001 12m5.243-5.243L12 12m0 0L6.758 6.757M12.001 12l5.243 5.243" />
        </svg>
    </button>
    <div class="fixed bottom-24 z-40 mx-4 inset-x-0 md:inset-x-auto md:max-w-xl " x-transition x-show="announcement">
        <div class="bg-red-600 text-gray-50 p-4 rounded-3xl mt-2">
            <h3 class='text-gray-50 h4 font-semibold text-xl flex items-center'>
                <svg class="text-gray-50 h-8 w-8 mr-2" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M17.212 2.237a.75.75 0 0 0-1.423-.474l-.75 2.249a.75.75 0 0 0 1.423.474l.75-2.249Zm4.568-.017a.75.75 0 0 1 0 1.06l-2.5 2.5a.75.75 0 1 1-1.06-1.06l2.5-2.5a.75.75 0 0 1 1.06 0ZM9.076 4.318a2.325 2.325 0 0 1 3.795-.577l7.006 7.506a2.325 2.325 0 0 1-.758 3.712l-3.42 1.516a4 4 0 0 1-7.314 3.24l-1.417.628a1.8 1.8 0 0 1-1.964-.336L3.565 18.65a1.8 1.8 0 0 1-.387-2.091l5.898-12.24Zm.682 14.789a2.5 2.5 0 0 0 4.569-2.024l-4.57 2.024Zm2.016-14.342a.825.825 0 0 0-1.346.204L4.53 17.21a.3.3 0 0 0 .064.349l1.439 1.356a.3.3 0 0 0 .327.056l12.151-5.383a.825.825 0 0 0 .27-1.317l-7.007-7.506ZM19 8.249a.75.75 0 0 1 .75-.75h2a.75.75 0 0 1 0 1.5h-2a.75.75 0 0 1-.75-.75Z" />
                </svg>
                Nous avons déménagé !
            </h3>
            <p class="text-gray-50 pt-4 whitespace-pre-wrap break-words">Découvrez notre nouveau parc et explorez nos parcours entièrement renouvelés, conçus pour enrichir votre expérience. Pour plus de détails, n’hésitez pas à nous contacter. À très bientôt dans notre nouvel espace !</p>
        </div>
    </div>
</div>