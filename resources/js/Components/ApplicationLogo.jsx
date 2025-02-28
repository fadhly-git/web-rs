export default function ApplicationLogo(props) {
    return (
        <div
            {...props}
            style={{
                backgroundImage: `url(/public/p-removebg-preview.png)`,
                backgroundSize: 'cover',
                backgroundPosition: 'center',
            }}
        ></div>
    );
}
