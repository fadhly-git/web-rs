import { usePage } from '@inertiajs/react';
export default function ApplicationLogo(props) {
    const { configs } = usePage().props;
    return <img {...props} src={`/storage/${configs.logo}`} alt="logo" />;
}
