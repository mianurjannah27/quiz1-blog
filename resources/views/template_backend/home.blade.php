@include('template_backend.header')
@include('template_backend.sidebar')

<body>    
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>@yield('subjudul')</h1>
          </div>
            
          <div class="section-body">
            @yield('content')
          </div>
        </section>
      </div>
@include('template_backend.footer')
</body>
</html>
