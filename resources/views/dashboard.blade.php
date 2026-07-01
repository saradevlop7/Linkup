<x-app-layout>
    <div class="min-h-screen bg-gray-100 py-8">
        <div class="max-w-6xl mx-auto px-4">

            <!-- Welcome Card -->
            <div class="bg-white rounded-2xl shadow-md p-8 mb-6">

                <div class="flex items-center">

                    <div class="w-16 h-16 rounded-full bg-blue-600 flex items-center justify-center text-white text-2xl font-bold">
                        {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                    </div>

                    <div class="ml-5">
                        <h2 class="text-2xl font-bold text-gray-800">
                            {{ Auth::user()->name }}
                        </h2>

                        <p class="text-gray-500">
                            {{ Auth::user()->headline ?? 'Professionnel LinkUp' }}
                        </p>
                    </div>

                </div>

            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

                <!-- Left Card -->
                <div class="bg-white rounded-2xl shadow-md p-6">

                    <h3 class="text-lg font-semibold text-gray-800 mb-4">
                        Mon Profil
                    </h3>

                    <p class="text-gray-600">
                        📧 {{ Auth::user()->email }}
                    </p>

                    <p class="text-gray-600 mt-3">
                        💼 {{ Auth::user()->headline ?? 'Complétez votre profil' }}
                    </p>

                </div>

                <!-- Feed Card -->
                <div class="lg:col-span-2">

                    <div class="bg-white rounded-2xl shadow-md p-8">

                        <h2 class="text-3xl font-bold text-gray-800 mb-3">
                            Welcome to LinkUp 🚀
                        </h2>

                        <p class="text-gray-600">
                            Vous êtes connecté avec succès.
                        </p>

                        <div class="mt-8 border rounded-xl p-5 bg-gray-50">

                            <h4 class="font-semibold text-gray-700 mb-2">
                                Quoi de neuf aujourd'hui ?
                            </h4>

                            <button class="w-full bg-blue-600 hover:bg-blue-700 text-white py-3 rounded-xl transition">
                                Créer une publication
                            </button>

                        </div>

                    </div>

                </div>

            </div>

        </div>
    </div>
</x-app-layout>
