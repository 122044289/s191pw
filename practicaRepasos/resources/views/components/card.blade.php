
<div class="card shadow-lg border-0" style="border-radius: 20px; background-color: #f7f7ff;">
   
    <div class="card-header text-white" style="background-color: #6A0DAD; border-radius: 20px 20px 0 0;">
        <h3>{{ $titulo }}</h3>
    </div>

    <div class="card-body" style="padding: 20px;">
        <p class="card-text">{{ $contenido }}</p>
        {{ $slot }} 
    </div>
    
    </div>

</div>

