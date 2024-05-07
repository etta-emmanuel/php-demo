<?php require ('views/partials/nav.php'); ?>

<?php require ('views/partials/head.php'); ?>

<?php require ('views/partials/banner.php'); ?>

    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="mt-5 md:col-span-2 md:mt-0 m-5 p-10" >
                    <form method="POST">
                        <div class="space-y-6 bg-white p-5 rounded">
                            <div class="border-b border-gray-900/10 pb-12">
                                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                    <div class="col-span-full">
                                        <div>
                                            <label for="about" class="block text-sm font-medium leading-6 text-gray-900">Body</label>
                                            <div class="mt-2">
                                                <textarea id="body" name="body" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Here's an idea for a note..." required >
                                                        <?= $_POST['body'] ?? '' ?>
                                                </textarea>
                                                <?php if (isset($errors['body'])) : ?>
                                                    <p class="text-red-500 text-xs mt-2"><?= $errors['body'] ?></p>
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                        <div class="col-span-full mt-3">
                                            <button type="submit" style="float:right;" class="rounded-md  bg-blue-500 px-2.5 py-1.5 text-sm font-semibold text-black shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-blue-200">Post</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

<?php require ('views/partials/footer.php'); ?>