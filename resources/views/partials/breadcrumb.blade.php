<nav class="text-[0.7rem] font-cta font-bold uppercase tracking-wider text-ink/40 mb-10" aria-label="Fil d'ariane">
  <a href="{{ url('/') }}" class="hover:text-crimson">Accueil</a>
  @foreach($crumbs as $crumb)
    /
    @if($loop->last)
      <span class="text-ink">{{ $crumb['label'] }}</span>
    @else
      <a href="{{ $crumb['url'] }}" class="hover:text-crimson">{{ $crumb['label'] }}</a>
    @endif
  @endforeach
</nav>
