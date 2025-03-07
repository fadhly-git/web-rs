import { useEffect, useState } from 'react';

export const ImgBanners = ({ img, ...props }) => {
    const [height, setHeight] = useState('');

    useEffect(() => {
        const isMobile = window.innerWidth <= 768;
        if (isMobile) {
            setHeight('16rem');
        } else {
            setHeight('35vw');
        }
    }, []);

    return (
        <div
            {...props}
            className={`aspect-video w-screen ${props.className || ''}`}
            style={{
                backgroundImage: `url(/storage/${img})`,
                backgroundSize: 'cover',
                backgroundPosition: 'center',
                height: `${height}`,
            }}
        />
    );
};
