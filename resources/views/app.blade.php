<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>JuniorContrib.dev</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white text-slate-800">

  <!-- Navbar -->
  <header class="flex items-center justify-between px-6 py-4 shadow">
    <h1 class="text-xl font-mono font-bold">
      <span class="text-black">&gt;</span> JuniorContrib.<span class="text-blue-600">dev</span>
    </h1>
    <a href="#projects" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
      Browse Projects
    </a>
  </header>

  <!-- Hero Section -->
  <section class="bg-blue-100 text-center py-16 px-4">
    <h2 class="text-3xl font-bold mb-4">Start Your Open Source Journey Here</h2>
    <p class="text-lg max-w-xl mx-auto mb-6">
      Discover beginner-friendly open source projects. Learn by doing, contribute with confidence, and grow with the community.
    </p>
    <a href="#projects" class="bg-blue-600 text-white px-6 py-3 rounded text-lg hover:bg-blue-700 transition">
      Browse Projects
    </a>
  </section>

  <!-- Features -->
  <section class="py-16 px-6 bg-white text-center">
    <div class="max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-10">
      <div>
        <div class="text-3xl mb-2">🚀</div>
        <h3 class="text-xl font-semibold mb-2">Easy Projects</h3>
        <p class="text-slate-600">Handpicked repos with beginner issues so you can contribute without stress.</p>
      </div>
      <div>
        <div class="text-3xl mb-2">🤝</div>
        <h3 class="text-xl font-semibold mb-2">Friendly Community</h3>
        <p class="text-slate-600">Join a network of developers who support, guide, and grow together.</p>
      </div>
      <div>
        <div class="text-3xl mb-2">📘</div>
        <h3 class="text-xl font-semibold mb-2">Step-by-Step Guides</h3>
        <p class="text-slate-600">Each project includes walkthroughs to get you contributing quickly and confidently.</p>
      </div>
    </div>
  </section>

  <!-- CTA Section -->
  <section class="bg-slate-100 py-16 text-center px-4">
    <h2 class="text-2xl font-semibold mb-4">Ready to contribute?</h2>
    <p class="mb-6">Find your first project and start your journey into open source today.</p>
    <a href="#projects" class="bg-blue-600 text-white px-6 py-3 rounded text-lg hover:bg-blue-700 transition">
      Explore Projects
    </a>
  </section>

</body>
</html>
