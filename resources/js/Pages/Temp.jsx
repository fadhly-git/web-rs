import { Breadcrumbs } from '@/Components/Breadcrumbs';
import { RevealBento } from '@/Components/Girds';
import { SwipeCarousel } from '@/Components/Home/Carousel';

const Example = () => {
    return (
        <>
            <div className="container mx-auto">
                <h1 className="text-white">Hello World</h1>
                <Breadcrumbs />
            </div>
            <SwipeCarousel />
            <RevealBento />
        </>
    );
};
export default Example;
