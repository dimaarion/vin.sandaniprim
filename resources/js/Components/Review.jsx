import Rating from "./Rating";

export default function Review(){
    function ReviewItem(el){
        return <div className="grid grid-cols-1  lg:grid-cols-5 gap-4 p-6">
            <div>
                <div>Risako M</div>
                <div className="text-gray-700">May 16, 2021</div>
            </div>
            <div className="text-yellow-500"><Rating /></div>
            <div className="col-span-3">
                I was really pleased with the overall shopping experience. My order even included a little personal, handwritten note, which delighted me!
                The product quality is amazing, it looks and feel even better than I had anticipated. Brilliant stuff! I would gladly recommend this store to my friends. And, now that I think of it... I actually have, many times!
            </div>
        </div>
    }

    return <div>

        <div className="rounded border mt-6">
           <div className="my-6 grid grid-cols-2">
               <div><h3 className="text-3xl mx-5">Отзывы</h3></div>
              <div className="text-right"> <button
                  onClick={() => {

                  }}
                  className="bg-pink-950 text-white px-4 mr-5  py-4 h-full text-lg hover:bg-gray-dark">
                  Оставить отзыв
              </button></div>
           </div>
            {[1,2,3,4,5,6,7].map((el,i)=><ReviewItem key = {i + "review"} />)}
        </div>
    </div>
}