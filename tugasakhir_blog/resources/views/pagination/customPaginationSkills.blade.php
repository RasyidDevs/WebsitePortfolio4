
@if ($paginator->hasPages())
<div class="row mt-2 mb-4">
    @if ($paginator->onFirstPage())
    <div class="col-md-6 col-6 d-flex justify-content-end">
        <a href="#" class="buttonPrev disabled"><- Prev</a>
    </div>
    @else
    <div class="col-md-6 col-6 d-flex justify-content-end">
        <a href="{{ $paginator->previousPageUrl() }}$skill-section" class="buttonPrev"><- Prev</a>
    </div>
    @endif
   @if ($paginator->hasMorePages())
   <div class="col-md-6 col-6 d-flex justify-content-start">
        <a href="{{ $paginator->nextPageUrl() }}#skill-section" class="buttonNext">Next -></a>
    </div>
    @else
    <div class="col-md-6 col-6 d-flex justify-content-start">
        <a href="#" class="buttonNext disabled">Next -></a>
    </div>
   @endif
</div> 
@endif
