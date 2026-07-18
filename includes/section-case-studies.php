<section id="cases" class="border-t border-hairline bg-canvas-soft py-24">
    <div class="mx-auto max-w-[1120px] px-4 sm:px-6">
        <div class="mb-12 max-w-2xl">
            <p class="text-sm font-semibold uppercase tracking-[0.18em] text-primary">Studi Kasus UI/UX</p>
            <h2 class="mt-4 text-4xl font-heading font-semibold text-ink">Proses desain yang bercerita, bukan hanya hasil akhir.</h2>
            <p class="mt-4 text-lg text-body">Setiap studi kasus menampilkan masalah, proses, dan solusi visual yang mendukung.</p>
        </div>
        <div class="grid gap-6 lg:grid-cols-2">
            <?php foreach ($caseStudies as $case) : ?>
                <article class="overflow-hidden rounded-[28px] bg-white shadow-md border border-hairline transition hover:-translate-y-1">
                    <img src="<?= htmlspecialchars($case['image'], ENT_QUOTES, 'UTF-8') ?>" alt="<?= htmlspecialchars($case['title'], ENT_QUOTES, 'UTF-8') ?>" class="h-64 w-full object-cover" loading="lazy">
                    <div class="p-6">
                        <h3 class="text-2xl font-semibold text-ink"><?= htmlspecialchars($case['title'], ENT_QUOTES, 'UTF-8') ?></h3>
                        <p class="mt-4 text-body-md text-body"><?= htmlspecialchars($case['summary'], ENT_QUOTES, 'UTF-8') ?></p>
                        <div class="mt-5 flex flex-wrap gap-2">
                            <?php foreach ($case['tags'] as $tag) : ?>
                                <span class="rounded-full bg-primary-soft px-3 py-1 text-sm font-semibold text-primary"><?= htmlspecialchars($tag, ENT_QUOTES, 'UTF-8') ?></span>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
