<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="text-align: center">
            {{ __('Bem-vindo a Pagina Home') }}
        </h2>
    </x-slot>

    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

    <div class="card-container">
        <div class="card mission-card">
            <div class="card-body">
                <h2 class="title">{{ __('Missão') }}</h2>
                <p>A missão da Club-Fy é proporcionar aos nossos clientes uma experiência única, oferecendo produtos de qualidade, exclusivos e inovadores. Buscamos transformar o modo como as pessoas consomem e interagem com a tecnologia, garantindo praticidade e satisfação em cada compra.</p>
            </div>
        </div>

        <div class="card vision-card">
            <div class="card-body">
                <h2 class="title">{{ __('Visão') }}</h2>
                <p>Ser reconhecida como a principal plataforma de e-commerce para tecnologia, sendo referência em inovação e excelência no atendimento ao cliente. Buscamos expandir nosso impacto, oferecendo sempre as últimas tendências em tecnologia com um compromisso inabalável com a qualidade e a ética.</p>
            </div>
        </div>

        <div class="card values-card">
            <div class="card-body">
                <h2 class="title">{{ __('Valores') }}</h2>
                <ul>
                    <li><strong>Qualidade:</strong> Oferecer produtos que atendam aos mais altos padrões de confiabilidade.</li>
                    <li><strong>Inovação:</strong> Estar à frente das tendências tecnológicas, oferecendo as melhores opções.</li>
                    <li><strong>Ética:</strong> Manter honestidade e integridade nas interações com clientes e parceiros.</li>
                    <li><strong>Sustentabilidade:</strong> Minimizar o impacto ambiental com práticas sustentáveis.</li>
                    <li><strong>Atendimento:</strong> Proporcionar uma experiência de compra excepcional com um atendimento eficiente e amigável.</li>
                </ul>
            </div>
        </div>
    </div>
</x-app-layout>
