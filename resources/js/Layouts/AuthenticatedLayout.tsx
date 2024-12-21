import ApplicationLogo from '@/Components/App/ApplicationLogo';
import Dropdown from '@/Components/Core/Dropdown';
import NavLink from '@/Components/Core/NavLink';
import ResponsiveNavLink from '@/Components/Core/ResponsiveNavLink';
import {Link, usePage} from '@inertiajs/react';
import {PropsWithChildren, ReactNode, useState} from 'react';
import Navbar from "@/Components/App/Navbar";

export default function Authenticated(
  {
    header,
    children,
  }: PropsWithChildren<{ header?: ReactNode }>) {
  const user = usePage().props.auth.user;

  const [showingNavigationDropdown, setShowingNavigationDropdown] =
    useState(false);

  return (
    <div className="min-h-screen bg-gray-100 dark:bg-gray-900">
      <Navbar/>
      <main>{children}</main>
    </div>
  );
}
