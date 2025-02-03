<section class="relative ">
    <div class="w-full py-10 mx-auto px-4 sm:px-6 lg:px-0">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 mx-auto max-md:px-2 ">
            <div class="img  flex justify-center">
                <div class="img-box rounded-[10px] max-lg:mx-auto ">
                    <img src="{{ asset('assets/images/' . $product->image) }}" alt="Yellow Tropical Printed Shirt image"
                        class="max-lg:mx-auto lg:ml-auto h-full object-cover">
                </div>
            </div>
            <div
                class="data w-full lg:pr-8 pr-0 xl:justify-start justify-center flex items-center max-lg:pb-10 xl:my-2 lg:my-5 my-0">
                <div class="data w-full max-w-xl">
                    <p class="text-lg font-medium leading-8 text-[#001952] mb-4">{{$product->category->name}}&nbsp; /&nbsp; {{$product->subcategory->name}}</p>
                    </p>
                    <h2 class="font-manrope font-bold text-3xl leading-10 text-[#001952] mb-2 capitalize">
                       {{$product->name}}</h2>
                    <div class="flex flex-col sm:flex-row sm:items-center mb-6">

                        <div class="flex items-center gap-2">
                            <div class="flex items-center gap-1">
                            <p class="text-[#001952] my-2">
                            <p class="text-[#001952] my-2"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i></p>
                            </p>

                            </div>
                            <span class="pl-2 font-normal leading-7 text-gray-500 text-sm ">1624 review</span>
                        </div>

                    </div>
                    <p class="text-gray-500 text-base font-normal mb-5">
                      {{$product->description}} <a href="#"
                            class="text-[#001952]">more....</a>
                    </p>
                    <ul class="grid gap-y-4 mb-8">
                        <li class="flex items-center gap-3">
                            <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect width="26" height="26" rx="13" fill="#001952" />
                                <path
                                    d="M7.66669 12.629L10.4289 15.3913C10.8734 15.8357 11.0956 16.0579 11.3718 16.0579C11.6479 16.0579 11.8701 15.8357 12.3146 15.3913L18.334 9.37183"
                                    stroke="white" stroke-width="1.6" stroke-linecap="round" />
                            </svg>
                            <span class="font-normal text-base text-gray-900 ">High-Quality Pet Essentials</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect width="26" height="26" rx="13" fill="#001952" />
                                <path
                                    d="M7.66669 12.629L10.4289 15.3913C10.8734 15.8357 11.0956 16.0579 11.3718 16.0579C11.6479 16.0579 11.8701 15.8357 12.3146 15.3913L18.334 9.37183"
                                    stroke="white" stroke-width="1.6" stroke-linecap="round" />
                            </svg>
                            <span class="font-normal text-base text-gray-900 ">Perfect for Dogs, Cats, Fish & More</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect width="26" height="26" rx="13" fill="#001952" />
                                <path
                                    d="M7.66669 12.629L10.4289 15.3913C10.8734 15.8357 11.0956 16.0579 11.3718 16.0579C11.6479 16.0579 11.8701 15.8357 12.3146 15.3913L18.334 9.37183"
                                    stroke="white" stroke-width="1.6" stroke-linecap="round" />
                            </svg>
                            <span class="font-normal text-base text-gray-900 ">Available in Various Sizes & Types</span>
                        </li>
                    </ul>
                   

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 py-8">
                        <div class="flex sm:items-center sm:justify-center w-full">
                            <button id="decrement" class="group py-4 px-6 border border-gray-400 rounded-l-full bg-white transition-all duration-300 hover:bg-gray-50 hover:shadow-sm hover:shadow-gray-300">
                                <svg class="stroke-gray-900 group-hover:stroke-black" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16.5 11H5.5" stroke="" stroke-width="1.6" stroke-linecap="round" />
                                    <path d="M16.5 11H5.5" stroke="" stroke-opacity="0.2" stroke-width="1.6" stroke-linecap="round" />
                                    <path d="M16.5 11H5.5" stroke="" stroke-opacity="0.2" stroke-width="1.6" stroke-linecap="round" />
                                </svg>
                            </button>
                            <input type="text" id="quantity" class="font-semibold text-gray-900 cursor-pointer text-lg py-[13px] px-6 w-full sm:max-w-[118px] outline-0 border-y border-gray-400 bg-transparent placeholder:text-gray-900 text-center hover:bg-gray-50" value="1">
                            <button id="increment" class="group py-4 px-6 border border-gray-400 rounded-r-full bg-white transition-all duration-300 hover:bg-gray-50 hover:shadow-sm hover:shadow-gray-300">
                                <svg class="stroke-gray-900 group-hover:stroke-black" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11 5.5V16.5M16.5 11H5.5" stroke="#9CA3AF" stroke-width="1.6" stroke-linecap="round" />
                                    <path d="M11 5.5V16.5M16.5 11H5.5" stroke="black" stroke-opacity="0.2" stroke-width="1.6" stroke-linecap="round" />
                                    <path d="M11 5.5V16.5M16.5 11H5.5" stroke="black" stroke-opacity="0.2" stroke-width="1.6" stroke-linecap="round" />
                                </svg>
                            </button>
                        </div>
                        <button
                        onclick="addToCart({{$product->id}})"
                            class="group py-4 px-5 rounded-full bg-indigo-50 text-indigo-600 font-semibold text-lg w-full flex items-center justify-center gap-2 transition-all duration-500 hover:bg-indigo-100">
                            <svg class="stroke-indigo-600 " width="22" height="22" viewBox="0 0 22 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10.7394 17.875C10.7394 18.6344 10.1062 19.25 9.32511 19.25C8.54402 19.25 7.91083 18.6344 7.91083 17.875M16.3965 17.875C16.3965 18.6344 15.7633 19.25 14.9823 19.25C14.2012 19.25 13.568 18.6344 13.568 17.875M4.1394 5.5L5.46568 12.5908C5.73339 14.0221 5.86724 14.7377 6.37649 15.1605C6.88573 15.5833 7.61377 15.5833 9.06984 15.5833H15.2379C16.6941 15.5833 17.4222 15.5833 17.9314 15.1605C18.4407 14.7376 18.5745 14.0219 18.8421 12.5906L19.3564 9.84059C19.7324 7.82973 19.9203 6.8243 19.3705 6.16215C18.8207 5.5 17.7979 5.5 15.7522 5.5H4.1394ZM4.1394 5.5L3.66797 2.75"
                                    stroke="" stroke-width="1.6" stroke-linecap="round" />
                            </svg>
                            Add to cart</button>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
    const decrementButton = document.getElementById('decrement');
    const incrementButton = document.getElementById('increment');
    const quantityInput = document.getElementById('quantity');

    decrementButton.addEventListener('click', function () {
        let currentValue = parseInt(quantityInput.value);
        if (currentValue > 1) {
            quantityInput.value = currentValue - 1;
        }
    });

    incrementButton.addEventListener('click', function () {
        let currentValue = parseInt(quantityInput.value);
        quantityInput.value = currentValue + 1;
    });
});
    </script>
</section>
                                        