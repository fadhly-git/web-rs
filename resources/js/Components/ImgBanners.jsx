export const ImgBanners = ({ img }) => {
    return (
        <div
            className="aspect-video w-screen"
            style={{
                backgroundImage: `url(/storage/${img})`,
                backgroundSize: 'cover',
                backgroundPosition: 'center',
                height: '35vw',
            }}
        />
    );
};
