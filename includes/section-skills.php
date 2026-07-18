<section id="skills" class="py-24">
    <div class="mx-auto max-w-[1120px] px-4 sm:px-6">
        <div class="mb-12 max-w-2xl">
            <p class="text-sm font-semibold uppercase tracking-[0.18em] text-primary">Keterampilan Teknis</p>
            <h2 class="mt-4 text-4xl font-heading font-semibold text-ink">Keterampilan inti yang saya gunakan setiap hari.</h2>
            <p class="mt-4 text-lg text-body">Dikelompokkan menurut peran untuk memberi gambaran yang jelas tentang area keahlian saya.</p>
        </div>
        <div class="grid gap-6 md:grid-cols-3">
            <?php foreach ($skills as $group => $items) : ?>
                <div class="rounded-[28px] bg-surface-card p-6 shadow-sm border border-hairline">
                    <h3 class="text-xl font-semibold text-ink"><?= htmlspecialchars($group, ENT_QUOTES, 'UTF-8') ?></h3>
                    <div class="mt-6 grid gap-3">
                        <?php foreach ($items as $item) : ?>
                            <div class="flex items-center gap-3 rounded-3xl bg-canvas-soft px-4 py-3">
                                <span class="inline-flex h-11 w-11 items-center justify-center rounded-2xl bg-primary-soft text-lg"><?= htmlspecialchars($item['icon'], ENT_QUOTES, 'UTF-8') ?></span>
                                <span class="font-medium text-body"><?= htmlspecialchars($item['name'], ENT_QUOTES, 'UTF-8') ?></span>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
