<nav class="p-4 bg-white shadow md:flex md:items-center md:justify-between md:px-14">
    <div class="flex justify-between items-center ">
        <span class="text-2xl font-[Poppins]">
            <img src="../../assets/img/logo.jpg" class="h-10 inline">
            voyage
        </span>
        <span class="text-3xl cursor-pointer mx-2 md:hidden block">
            <ion-icon name="menu" onclick="Menu(this)"></ion-icon>
        </span>
    </div>
    <ul class="md:flex md:items-center z-[2] md:z-auto md:static absolute bg-white w-full left-0 md:w-auto md:py-0 py-4 md:pl-0 pl-7 md:opacity-100 opacity-0 top-[-400px] transition-all ease-in duration-500">
        <li class="mx-4 my-6 md:my-0">
            <a href="/" class="text-xl hover:text-sky-800 duration-100">Accueil</a>
        </li>
        <li class="mx-4 my-6 md:my-0">
            <a href="/?page=sea" class="text-xl hover:text-sky-800 duration-100">La Mer</a>
        </li>
        <li class="mx-4 my-6 md:my-0">
            <a href="/?page=mountains" class="text-xl hover:text-sky-800 duration-100">Les Montagnes</a>
        </li>
    </ul>

</nav>
