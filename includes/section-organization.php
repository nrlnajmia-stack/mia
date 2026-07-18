<section id="organization" class="border-t border-hairline bg-canvas-soft py-24">
    <div class="mx-auto max-w-[1120px] px-4 sm:px-6">
        <div class="mb-12 max-w-2xl">
            <p class="text-sm font-semibold uppercase tracking-[0.18em] text-primary">Pengalaman Organisasi</p>
            <h2 class="mt-4 text-4xl font-heading font-semibold text-ink">Kontribusi sosial dan pengalaman organisasi yang memperkaya soft skill.</h2>
            <p class="mt-4 text-lg text-body">Beragam peran organisasi memberikan konteks pada kemampuan kolaborasi dan manajemen saya.</p>
        </div>
        <div class="grid gap-6 lg:grid-cols-2">
            <?php foreach ($organizations as $org) : ?>
                <article class="rounded-[28px] bg-white p-6 shadow-sm border border-hairline transition hover:-translate-y-1">
                    <img src="<?= htmlspecialchars($org['image'], ENT_QUOTES, 'UTF-8') ?>" alt="<?= htmlspecialchars($org['name'], ENT_QUOTES, 'UTF-8') ?>" class="h-56 w-full rounded-3xl object-cover" loading="lazy">
                    <div class="mt-5">
                        <p class="text-sm uppercase tracking-[0.16em] text-mute"><?= htmlspecialchars($org['period'], ENT_QUOTES, 'UTF-8') ?></p>
                        <h3 class="mt-2 text-2xl font-semibold text-ink"><?= htmlspecialchars($org['name'], ENT_QUOTES, 'UTF-8') ?></h3>
                        <p class="mt-2 text-sm font-semibold text-primary"><?= htmlspecialchars($org['role'], ENT_QUOTES, 'UTF-8') ?></p>
                        <p class="mt-4 text-body-md text-body"><?= htmlspecialchars($org['description'], ENT_QUOTES, 'UTF-8') ?></p>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
