<div>
    <section class="cards-container">
        <h1 class="title">Memberships & Packages</h1>
        <h2 class="subtitle">Prices for membership and packages</h2>
        <div class="cards-row">
            @foreach($memberships as $membership)
                <div class="card-container {{ $membership['style'] }}">
                    <div class="bg-[#EFE9E4] h-10"></div>
                    <div class="card" style="border-top-left-radius: 20px; border-top-right-radius: 20px;">
                        <h2 class="card-title">{{ $membership['title'] }}</h2>
                        <p class="card-description">ENJOY THE FEATURES</p>
                        <ul class="card-benefits">
                            @foreach($membership['benefits'] as $benefit)
                                <li>{{ $benefit }}</li>
                            @endforeach
                        </ul>
                    </div>
                    <button class="subscribe-button hover:text-2xl transition-all" 
                            wire:click="subscribe('{{ $membership['title'] }}')">
                        {{ Str::contains($membership['title'], 'Membership') ? 'Subscribe' : 'Purchase' }}
                    </button>
                </div>
            @endforeach
        </div>
    </section>
</div>
