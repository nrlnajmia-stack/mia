<section id="projects" class="py-24">
    <div class="mx-auto max-w-[1120px] px-4 sm:px-6">
        <div class="mb-12 max-w-2xl">
            <p class="text-sm font-semibold uppercase tracking-[0.18em] text-primary">Proyek Web Development</p>
            <h2 class="mt-4 text-4xl font-heading font-semibold text-ink">Proyek web yang berjalan lancar di semua perangkat.</h2>
            <p class="mt-4 text-lg text-body">Hasil kerja teknis saya ditata agar mudah dinavigasi dan cepat dimuat.</p>
        </div>
        <div class="grid gap-6 lg:grid-cols-2">
            <?php foreach ($projects as $project) : ?>
                <article class="overflow-hidden rounded-[28px] bg-white shadow-md border border-hairline transition hover:-translate-y-1">
                    <img src="<?= htmlspecialchars($project['image'], ENT_QUOTES, 'UTF-8') ?>" alt="<?= htmlspecialchars($project['title'], ENT_QUOTES, 'UTF-8') ?>" class="h-64 w-full object-cover" loading="lazy">
                    <div class="p-6">
                        <h3 class="text-2xl font-semibold text-ink"><?= htmlspecialchars($project['title'], ENT_QUOTES, 'UTF-8') ?></h3>
                        <p class="mt-4 text-body-md text-body"><?= htmlspecialchars($project['description'], ENT_QUOTES, 'UTF-8') ?></p>
                        <div class="mt-4 flex flex-wrap gap-2">
                            <?php foreach ($project['tech'] as $tech) : ?>
                                <span class="rounded-full bg-primary-soft px-3 py-1 text-sm font-semibold text-primary"><?= htmlspecialchars($tech, ENT_QUOTES, 'UTF-8') ?></span>
                            <?php endforeach; ?>
                        </div>
                        <a href="<?= htmlspecialchars($project['link'], ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener noreferrer" class="mt-6 inline-flex text-sm font-semibold text-primary hover:text-primary-deep">Lihat detail →</a>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
