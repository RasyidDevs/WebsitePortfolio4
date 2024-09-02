<div class="container-fluid skill" id="skill-section">
    <div class="container">
        <div class="row">
            <p class="skillTitle text-center">My <span>Skills</span></p>
        </div>
        @php
            $count = 0;
        @endphp
    
        @foreach ($skills as $skill)
            @php
                $rightValue = 100 - $skill->percentage . '%';
            @endphp
            @if ($count % 2 == 0)
                @if ($count != 0)
                    </div> <!-- Close the previous row -->
                @endif
                <div class="row">
                <div class="col-lg-2"></div>
            @endif
            <div class="col-lg-4 col-md-6 col-12 parentSkill">
                <div class="kotakSkill container-fluid d-flex flex-column">
                    <div class="row pt-4 d-flex justify-content-center">
                        <div class="logoSkill d-flex justify-content-center" style="width: 4rem; height:4rem">
                            <img src="{{ asset("assets/frontend/images/" . $skill->images) }}" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="row mt-3 text-center">
                        <p class="skillSet">{{ $skill->skill_name }}</p>
                    </div>
                    <div class="row flex-grow-1"></div> 
                    <div class="d-flex percentage align-items-center justify-content-between mb-3">
                        <div class="battery">
                            <div class="battery-fill" style="
                                content: '';
                                position: absolute;
                                top: 0;
                                left: 0;
                                bottom: 0;
                                right: {{ $rightValue }};
                                background-color: #2BDE32;
                                border-radius: 8%;
                                z-index: 1;
                            "></div>
                        </div>
                        <p class="centered">{{ $skill->percentage }}%</p>
                    </div>
                </div>   
            </div>
            @php
                $count++;
            @endphp
    
            @if ($count % 2 == 0)
                <div class="col-lg-2"></div>
            @endif    
        @endforeach
        @if ($count % 2 != 0)
            <div class="col-lg-2"></div>
            </div> <!-- Close the last row if it has an odd number of columns -->
        @endif
        </div>
        {{ $skills->links("pagination.customPagination") }}
    </div> 
</div>




